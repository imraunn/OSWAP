require('dotenv').config();
const mongoose = require('mongoose');
const fs = require('fs');
mongoose.connect(process.env.MONGO_URL).then(seed);

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


async function seed() {
const schema = new mongoose.Schema({
    name: String,
    year: Number,
    position: String,
    note: String
});

const model = mongoose.model('user', schema);

let seeds = [
    {
        name: 'Masrt',
        year: 3,
        position: 'root',
        note: ''
    },
    {
        name: 'Naughtyb0y',
        year: 4,
        position: 'root',
        note: ''
    },
    {
        name: 'Al13n',
        year: 2,
        position: 'Moderator',
        note: ''
    },
    {
        name: 'I M NoOne',
        year: 2,
        position: 'Moderator',
        note: ''
    },
    {
        name: 'Archi',
        year: 2,
        position: 'bots',
        note: ''
    },
    {
        name: 'Rovolang',
        year: -1,
        position: 'bots',
        note: ''
    },
    {
        name: 'deadly killer',
        year: 2,
        position: 'Desh Drohi',
        note: ''
    },
    {
        name: 'Alphx',
        year: 2,
        position: 'sys-admin',
        note: ''
    },
    {
        name: 'anantarupa1801',
        year: 2,
        position: 'sys-admin',
        note: ''
    },
    {
        name: 'ayelmao',
        year: 2,
        position: 'sys-admin',
        note: ''
    },
    {
        name: 'LEO',
        year: 2,
        position: 'sys-admin',
        note: ''
    },
    {
        name: 'otaku_1911',
        year: 2,
        position: 'sys-admin',
        note: ''
    },
    {
        name: 'v1per',
        year: 2,
        position: 'sys-admin',
        note: ''
    },
    {
        name: 'xececot',
        year: -1,
        position: 'www-data',
        note: await getFlag()
    }
];

    console.log('seeding..');
    await model.deleteMany({});
    for ( seed of seeds ) {
        let doc = new model(seed);
        await doc.save();
    };
    console.log('done');
    process.exit()
}
