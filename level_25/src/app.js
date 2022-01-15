require('dotenv').config();
const express = require('express');
const app = express();
const bodyParser = require('body-parser');

const mongoose = require('mongoose');
mongoose.connect(process.env.MONGO_URL);

const schema = new mongoose.Schema({
    name: String,
    year: Number,
    position: String,
    note: String
});
const model = mongoose.model('user', schema);

app.set('etag', false);
app.use(bodyParser.urlencoded());
app.set('view engine', 'ejs');
app.use(express.static('public'));

app.get('/', async (req, res) => {
    try {
        let query;
        if (
            !req.query.role ||
            req.query.role === 'all'
        ) {
            query = {
                name: {
                    $ne: 'xececot'
                }
            };
        } else {
            let role = req.query.role;
            if ( role === 'www-data' || Object.prototype.toString.call(role) === '[object Array]' ) {
                role = 'hehehe';
            }
            query = {
                position: role
            };
        }

        let results = await model.find(query);
        res.render('index', {
            rows: results
        });
    } catch ( error ) {
        console.log(error);
        res.status(500);
        res.send('Internal Server Error');
    }
});

app.listen(process.env.PORT, () => console.log('Listening on', process.env.PORT));