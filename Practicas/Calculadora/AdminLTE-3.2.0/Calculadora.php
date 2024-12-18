<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Calculadora Principal</title>
</head>
<body>
 <!-- C es el valor de la opción de compra, -->

<!-- <script src="js/jquery.min.js"></script>   -->
<script type="text/javascript">

function calculate(){
    var e=document.getElementById("n2").value,
    t=document.getElementById("n1").value,
    n=document.getElementById("n3").value,
    a=document.getElementById("prd"),
    r=a.value,
    i=n;

n=1==r?parseFloat(i/365).toFixed(8):2==r?parseFloat(i/12).toFixed(8):i;

var l=document.getElementById("n4").value/100,
d=document.getElementById("n5").value/100,
u=document.getElementById("n6").value/100,
m=new Array;

        m=[e,t,n,l,d,u];
        var o=0,v=0;
        o=fn_Fcall(m).Value,
        v=fn_Fput(m).Value;   
        var c=document.getElementById("info");
        c.innerHTML="Call Price: <b>"+c3((1*o).toFixed(3))+"</b>";
        var s=document.getElementById("info1");
        s.innerHTML="Put Price: <b>"+c3((1*v).toFixed(3))+"</b>"
}
function fn_Fcall(e){
var t,n,a,r,i,l;
t=e[0],
n=e[1],
a=e[2],
r=e[3],
i=e[4],
l=e[5];

var d=Math.sqrt(a),

u=1/(r*d)*(Math.log(t/n)+(i-l+r*r/2)*a),

m=u-r*d,
o=fn_NCD(u),
v=fn_NPD(u),
c=fn_NCD(m),
s=(fn_NPD(m),
   
   Math.exp(-i*a)),
   g=n*s,
   _=Math.exp(-l*a),
   p=o*t*_-c*g,
   y=_*o,
   f=_*v/(t*r*d),
   h=t*_*v*d,
   x=-_*t*v*r/(2*d)-i*g*c+l*t*_*o,
   E=g*a*c;

return{
    d1:u,
    d2:m,
    Value:p,
    Delta:y,
    Gamma:f,
    Vega:h,
    Theta:x,
    Rho:E }
}
function fn_Fput(e){
    
var t,n,a,r,i,l;
    t=e[0],n=e[1],a=e[2],r=e[3],i=e[4],l=e[5];
    var d=Math.sqrt(a),
    u=1/(r*d)*(Math.log(t/n)+(i-l+r*r/2)*a),
    m=u-r*d,o=fn_NCD(-u),
    v=fn_NPD(u),
    c=fn_NCD(-m),
    s=(fn_NPD(m),
    Math.exp(-i*a)),
    g=n*s,
    _=Math.exp(-l*a),
    p=c*g-o*t*_,
    y=-_*o,
    f=_*v/(t*r*d),
    h=t*_*v*d,
    x=-_*t*v*r/(2*d)+i*g*c-l*t*_*o,
    E=-g*a*c;
    return{
        d1:u,
        d2:m,
        Value:p,
        Delta:y,
        Gamma:f,
        Vega:h,
        Theta:x,
        Rho:E }
}
function onchng(){var e=document.getElementById("n3"),t=document.getElementById("t"),n=document.getElementById("prd"),a=n.value,r=(t.value,e.value);1==a?t.value=parseFloat(r/365).toFixed(8):2==a?t.value=parseFloat(r/12).toFixed(8):t.value=r,state()}


function fn_NCD(e){
    return fn_CD(e,0,1)
}

function fn_NPD(e){
    return 1/Math.sqrt(2*Math.PI)*Math.exp(-.5*e*e)
}

function fn_CD(e,t,n){
    return-1e5>(e-t)/n?0:(e-t)/n>1e5?1:.5*(1+fnER((e-t)/Math.sqrt(2*n)))
}
function fnER(e){
var t=e>=0?1:-1;
e=Math.abs(e);
var n=.3275911,
a=.254829592,
r=-.284496736,
i=1.421413741,
l=-1.453152027,
d=1.061405429,

u=1/(1+n*e),
m=1-((((d*u+l)*u+i)*u+r)*u+a)*u*Math.exp(-e*e);
return t*m}

function c3(e){
    var t=!1;
    return 0>e&&(t=!0,e=Math.abs(e)),(t?"-$":"$")+parseFloat(e,10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g,"$1,").toString()
}
</script>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        
        <form>
          <p>
          <label>Precio al contado (SP)</label> 
          <input type="number" name="n2" id="n2" step="any" min="0" value="300" onchange="calculate();" /></p>
          <p>
          <label>Precio de ejercicio (ST)</label> 
          <input type="number" name="n1" id="n1" step="any" min="0" value="250" onchange="calculate();" /></p>
          <p>
          <label>Tiempo de expirar, por años (T)</label> 
          <input type="number" name="n3" id="n3" step="any" min="0" value="1" onchange="calculate();" />
          <select id="prd" onchange="onchng();calculate();"><option value="1">Dias</option><option value="2">Meses</option><option value="3" selected="">Años</option></select>
      </p>
          <p>
          <label>Volatilidad (V)<!--  anualizada de la accion (como decimal, v)--></label> 
          <input type="number" name="n4" id="n4" step="any" min="0" value="15" onchange="calculate();" /> </p>
          <p>
          <label>La tasa de interés libre de riesgo actual (como decimal, r)</label> 
          <input type="number" name="n5" id="n5" step="any" min="0" value="3" onchange="calculate();" /> </p>
          <p>
          <label>Rentabilidad por dividendo (como decimal, d)</label> 
          <input type="number" name="n6"  id="n6" step="any" min="0" value="0" onchange="calculate();" /> </p>
        
          <p><input  type="submit" value="Calcular" name="cal" onclick="calculate()" /></p>

          <br><br>
          <p> <label>Valor de la opción de compra (c)</label> <br><br>
            <div id="info" style="margin-top:20px;padding-left:20px;"></div>
            <div id="info1" style="margin-top:20px;padding-left:20px;"></div>

           </p>

          <br><br><br>
        </form>
</body>
</html>