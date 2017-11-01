const http = require('http'); //import file
const fs = require('fs');

const hostname = '127.0.0.1';
const port = 8000;


fs.readFile('index.html', (err, html) => { //ปกติเป็น asyn readFilesyn เป็นแบบ sync
    if (err) { throw err; }

    const server = http.createServer((req, res) => { //=> arrow function  or use function(req,res)
        res.statusCode = 200; //callback function : ไม่มีชื่อ
        res.setHeader('Content-type', 'text/html');
        res.write(html)
        res.end();

    });
    //ทำงานแบบ async ไม่ต้องรอจนกว่าจะทำเสร็จ อย่างข้างบนจะทำก็ต่อเมื่อมีรีเควสเท่านั้น

    server.listen(port, hostname, () => {
        console.log('Server started on port' + port);
    });
});