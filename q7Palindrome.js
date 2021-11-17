const http = require('http');
const url = require('url');

http.createServer(function (req, res) {
    res.writeHead(200, { 'Content-Type': 'text/plain' });
    let q = url.parse(req.url, true).query;
    let palindrome = q.text;
    let result = isPalindrome(palindrome);
    res.end(result.toString());
}).listen(8080);
function isPalindrome(s) {
    for(var i=0;i<s.length;i++){
        if(s[i]!=s[s.length-1-i]){
            return "Not Palindrome";
            
        }
    }
    return "is Palindrome";
}
