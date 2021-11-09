s='hello';
for(var i=0;i<s.length;i++){
    if(s[i]!=s[s.length-1-i]){
        console.log('not palindrome');
        break;
    }
}