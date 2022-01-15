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
    let doc = await model.findOne({
        name: 'xececot'
    });

    doc.note = await getFlag();
    await doc.save();

    console.log('planted flag');
    process.exit();
}
