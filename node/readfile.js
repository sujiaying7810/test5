var fs = require('fs');
fs.readFile('abc.txt', 'utf-8', function(err, data) {
    if (err) {
        console.error(err);
    } else {
        console.log(data);
    }
});
console.log('end.');/**
 * Created by dell1 on 2018/1/19.
 */
