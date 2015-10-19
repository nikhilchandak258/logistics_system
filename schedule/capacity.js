function capacity()
{
for(i=1;i<=2;i++){

var w[i]=$("#"i).text();
}
alert(w[1]);
for(i=1;i<=2;i++)
if(w[i]=='0')
{
$("#w"i).addClass("full");
$("#w1").text("full");
}
}