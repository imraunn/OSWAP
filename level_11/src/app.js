require('dotenv').config();
const express = require('express');
const app = express();
const bodyParser = require('body-parser');
const jwt = require('jsonwebtoken');
const cookieParser = require('cookie-parser');
const fs = require('fs');

const adminName = 'N07_4n_4dM1N';

app.set('etag', false);
app.use(cookieParser());
app.use(bodyParser.urlencoded());
app.set('view engine', 'ejs');
app.use(express.static('public'));

function verifyToken(token) {
    return new Promise((resolve, reject) => {
        jwt.verify(token, process.env.SECRET, (err, decoded) => {
            if ( err ) {
                reject(err);
            } else {
                resolve(decoded);
            }
        });
    });
}

function signToken(payload) {
    return new Promise((resolve, reject) => {
        jwt.sign(payload, process.env.SECRET, {
            expiresIn: '10 days'
        }, (err, token) => {
            if ( err ) {
                reject(err);
            } else {
                resolve(token);
            }
        });
    });
}

function getFlag() {
    return new Promise((resolve, reject) => {
        fs.readFile('/usr/app/flag.txt', (err, data) => {
	    if ( err ) {
	        reject(err);
	    } else {
	        resolve(data);
	    }
	});
    });
}

app.get('/', async (req, res) => {
    try {
        let name = false;
        if ( req.cookies.nid ) {
            let decoded = await verifyToken(req.cookies.nid);
            name = decoded.name;
        }

        let message = 'Only admin can view the secret';
        if ( name && name === adminName ) {
	    message = 'Welcome back, admin. Here\'s your secret: ' + await getFlag();
        }
        res.render('index', {
            message
        });
    } catch ( error ) {
        console.log(error);
        res.status(500);
        res.send('Internal Server Error');
    }
});

app.post('/', async (req, res) => {
    try {
        if ( typeof req.body.name === 'string' ) {
            let name = req.body.name;
            if ( req.body.name === adminName ) {
                name = 'Hehe Boi!';
            }
            let token = await signToken({
                name: name
            });
    
            res.cookie('nid', token);
        }
        res.redirect('/');
    } catch ( error ) {
        console.log(error);
        res.status(500);
        res.send('Internal Server Error');
    }
});

app.listen(process.env.PORT, () => console.log('Listening on', process.env.PORT));
