function isPrime(n){
    if(n<2){
        return false;
    }
    for(var i=2;i<n;i++){
        if(n%i==0){
            return false;
        }
    }
    return true;
}
var n=9;
for(var i=1;i<=n;i++){
    if(isPrime(i)){
        console.log(i);
    }
}