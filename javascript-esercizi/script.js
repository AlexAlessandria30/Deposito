
//esercizi 1 e 2


/*


let a= 9;
let b= 7;
let c= 4;
let d= 6;
let e= 5;

let x = a+b+c+d+e;

console.log (x);

let y= x/5;

console.log (y);

const anno_corrente= 2021

let anno_nascita= 2001

let anni = anno_corrente-anno_nascita;

console.log(anni)

let cento = 100-anni
console.log(cento)

let strl = `hai $(anni) e ti mancano $(cento) per i cento anni`

console.log(strl) 





//esercizi 3 a 6

//n3


let numeroSettimana = 4;

switch(numeroSettimana)
{
    case 1:
        console.log('Lunedi');
        break;
    case 2:
        console.log('Martedi');
        break;
    case 3:
        console.log('Mercoledi');
        break;
    case 4:
        console.log('Giovedi');
        break;
    case 5:
        console.log('Venrdi');
        break;
    case 6:
        console.log('Sabato');
        break;
    case 7:
        console.log('Domenica');
        break;
    default:
        console.log("Errore! Giorno della settimana non valido!");

}



//n4


let voto = 29;

if(voto <= 30){
   if( voto < 18 ){
       console.log("insufficente")
   }
  else if( voto >= 18 && voto < 21 ){
    console.log("sufficente")
}
 else if( voto >= 21 && voto < 24 ){
    console.log("buono")
}
 else if( voto >= 24 && voto < 27){
    console.log("distinto")
}
 else if( voto>= 27 && voto < 29 ){
    console.log("ottimo")
}
 else{
    console.log("eccellente")
}
}





//n5



let min = 1;
let max = 6;


let punteggioG1 = 0;
let punteggioG2 = 0;


let giocate = 5;

for(let i = 0; i < giocate; i++)
{
    let numeroDadoG1 = Math.floor(Math.random() * (max - min + 1) + min); 
    punteggioG1 = punteggioG1 +numeroDadoG1; 


    let numeroDadoG2 = Math.floor(Math.random() * (max - min + 1) + min); 
    punteggioG2 = punteggioG2 +numeroDadoG2; 

}

console.log("Punteggio gicoatore 1", punteggioG1);
console.log("Punteggio gicoatore 2", punteggioG2);

if(punteggioG1 > punteggioG2)
{
    console.log("Giocatore 1 Vince");
}
else if(punteggioG2 == punteggioG1)
{
    console.log("Parità");
}
else
{
    console.log("Giocatore 2 Vince");
}




//n6



let stinga "";

for(let i = 0; i<=100; i++){
    

    stringa = stringa + "" +i;

    if(i % 10 == 0){

        striga = stringa + \n;
        console.log(stringa)
        stringa = ""



    }
}




//n da 7 a 11
//n7



function uguaglianza(valore1 , valore2){
    if(valore1 === valore2){
       return "true"
    }else(valore1 !== valore2);{
        return "false";
    }

}
uguaglianza(6,6)




//n8

let numero =[11,22,34,46,180,66,73,18,99,1,1112334]

let minore = numero [0];
let maggiore = numero [0];

function max(numero) {
  
    for (let i = 0; i< numero.length ; i++){
     if(numero[i]>maggiore){
      maggiore = numero[i] ;
  }
} 
console.log (`il maggiore è ${maggiore}`)

}

max(numero)

function min(numero){

    for ( let i = 0; i< numero.length; i++){
        if(numero[i] < minore) {
          minore = numero[i] ;
        }

    }

   console.log(` il minore è ${minore}`)
}


min(numero)   


//n9


let numeri =[2,3,0,4,6,5,7,1,9,8] 
let numeri2 =[2,3,0,4,6,5,7,1,9,8]

console.log(numeri.sort((a,b)=> a - b ))
console.log(numeri2.sort((a,b)=> b - a))

//n10

let array1 =[2,32,53,61,74,1,19,53,53,85];
let array2 =[91,72,53,44,25,66,17,28,89,3];
let array3 = [];

function somma(){
  for(let i=0; i< array1.length; i++){

    let array4= array1[i] + array2[i];
    array3.push(array4);
  }


  console.log(array3)

  

 

}

somma()
  

//n11

let valori =[1,4,6,2,4,9,7,6,5,3,6]


function mediaeminori(a){

    let sum=0
   

    for(let i=0; i<valori.length; i++){
        const num = valori[i]

        sum+=num


    }
    let media = sun/ a.length
    
    let minori =[] 

    for (let i = 0; i < valori.length; i++) {
        const num = valori[i];

        if (num < media) {
            minori.push(num)
            
        }
        
    }

return `la media e ${media.toFixed(2)}  e i valori minori sono ${minori}`

}




let result = mediaeminori(a)
console.log(result)



//12 e 13 
//12


let Ospedale = {
    paziente:[

    { Nome: "Francesco", Cognome: "Rossi", eta: 30, Malattia: "febbre" },
    { Nome: "Mario", Cognome: "Bianchi", eta: 24, Malattia: "emicraneia" },
    { Nome: "Alessandro", Cognome: "FA", eta: 43, Malattia: "raffreddore"},
    { Nome: "Giovanni", Cognome: "White", eta: 28, Malattia: "tosse" },
],

   pazientiOspedale : function() {
        for (let pazienti of this.paziente) {
            console.log(pazienti)
        }
        

       
   },

   curare: function(Malattia) {

       let pazientiCurati = this.paziente.filter(element =>  element.Malattia != Malattia)
     
      this.paziente=pazientiCurati
      console.log(this.paziente)
   },

   nuoviPazienti: function (Nome , Cognome, eta , Malattia) {
        this.paziente.push({
            Nome: Nome,
            Cognome: Cognome,
            eta : eta,
            Malattia: Malattia

        })
       
   },
  
};

Ospedale.curare("febbre")
Ospedale.curare("emicraneia")
Ospedale.nuoviPazienti( "Alex", "Alessandria",19,"nonloso")
console.log(Ospedale.hasOwnProperty("nome"))







//13


let salagiochi = {
    giocatori: [
        {nome:"MAx", cognome:"V"},
        {nome:"Anto", cognome:"GIO"},
        {nome:"Ale", cognome:"F"},
        {nome:"luca", cognome:"A"},
    ],

    nuovoGiocatori: function (nome, cognome, ){
        this.giocatori.push({
            nome: nome,
            congome: cognome,
    
        })
    },

    eliminato: function (nome){
            for (let i = 0; i < this.giocatori.length; i++){
                if (this.giocatori[i].nome == nome)
                this.giocatori.splice(i, 1)
            }
        },
}

salagiochi.eliminato("Max")
console.log(salagiochi.giocatori)

salagiochi.nuovoGiocatore("pa" ,"olo")
console.log(salagiochi.giocatori)



//esercizi video!!!!

//1
function areaCerchio(raggio) {

    return Math.PI*raggio*2
    
}

console.log(areaCerchio(10));

//2


function ipotenusa(latoA , latoB) {
    return Math.sqrt(latoA ** 2 + latoB ** 2)
    
}

console.log(ipotenusa(3,4));

//3

function casual(n1,n2) {
    return Math.round(Math.random()*(n2 - n1 )+n1)
    
}

console.log(casual(5,43))

//4

function iniziali(stringa){
  return  stringa.split(" ").map(el => el[0]+".").join(" ")
}

console.log(iniziali("tizio caio"))
console.log(iniziali("marco antonio francesco guglielmo"))

//5

function triangolo(a,b,c){

    let primo = (a>Math.abs(b-c)) && (a< (b+c))
    let secondo= (b>Math.abs(a-c)) && (b< (a+c))
    let terzo =  (c>Math.abs(a-b)) && (c< (a+b))

    return primo && secondo && terzo
}
console.log(triangolo(3,4,5))
console.log(triangolo(234,356,50))



//6


function caas(num) {

    let arr =[num]

    while (num > 1) {

        if (num % 2 == 0) {
            
            num = num / 2
        }else {
            num = 3 * num + 1
        }

         arr.push(num)
    }
    return arr
    
}

console.log(caas(1230))


//7

for (let i = 0; i <= 100; i++) {
    if (i % 3 == 0 && i % 5 == 0) {
        console.log("java script")

    } else if (i % 5 == 0) {
        console.log("script")

    } else if (i % 3 == 0) {

        console.log("java")
    }

    console.log(i)

}

//8

function fibonacci(n){

    if(n == 1) return [1]
    let final =[1,1]

    for (let i = 2; 1 < n ; i++) {
      final.push( final[i-2] + final[i-1])
        
    }
    return finale
}

console.log(fibonacci(1));

//9

function primo(n) {
    if(n == 1) return false
    if(n == 2) return true

    for (let i = 2; i <n; i++) {
       
        if ( n % i == 0){
            return false
        }
        
       
    }

    return true
    
}

console.log(primo(300));





//10
//  let sum = 0 

//for (let i = 0; i < array.length; i++) {
        
   // if(Number(arr[i])) sum += (Number(arr[i]))     // insieme alla oarte di sotto fino al punto filter
    
//}
//return sum

/*
function sommaS(str) {

    return str.split(" ").filter( el => Number(el)).map(el => Number(el)).reduce((t,n)=> t+n)
    

}
console.log(sommaS("il sono 1 stringa di tante parole ad esempio 10"));


//11

function over(array,soglia) {
   return array.filter(el => el > soglia)
    
    
}




//12
function orario(num) {

    let ore=  Math.floor(num/60)
    if(ore<10)ore="0"+ore
    let minuti = num% 60
    if(minuti<10)minuti="0"+minuti

    return `ore ${ore} : ${minuti}`
    
}

console.log(orario(530));

//13

function caos(n,min,max) {
    let final = []

    for (let i = 0; i < n; i++) {
      final.push(Math.round(Math.random()*(max-min)+min))
        
    }
    return final
}

console.log(caos(3,1,6));

//14

function arrayObject(array) {

    return Object.fromEntries(array)
    
}

console.log(arrayObject())


//15

function stringaOb(string) {

    let array = string.split(" ")
    let unici = Array.from(new Set(array))

    let arrayDiArray = unici.map(el => [el, array.filter(e => e == el).lenght])

    return Object.fromEntries(arrayDiArray)
}

console.log(stringaOb("quella cosa e una cosa ma non cosa"));

//16


function maiusc(string) {

    let array= string.split("")

    for (let i = 0; i < array.length; i++) {

       array[i]= array[i][0].toUpperCase()+array[i].substr(1)
        
    }

    return array.join("")
    
}

console.log(maiusc("bella per tutti ma soprattutto per uno"));



//17

function vocale(string) {

    let vocali =["a","e","i","o","u"]

    let somma = 0 

    for (let i = 0; i < string.length; i++) {
       
        if(vocali.includes(string[i].toLowerCase())) sum++
    }
    
    return somma
    
}

console.log(vocale("io sono una vocale di tipo A"));


//18

function slug(string) {

    let array = string.split(" ")
    let final=[]

    for (let i = 0; i < array.length; i++) {
        
        final.push(array[i].toLowerCase())
        
    }
    return "/"+final.join("-")
    

   
}

console.log(slug("sono una stringa"));



//19

function parolaLunga(string) {

    return string.split(" ").sort((a,b) => a.length - b.length).pop()
    
}


console.log(parolaLunga("sono una stringa lunga e spero che almenp questa funzioni"));
//20

function pariDispari(array) {

    let sum = array.reduce( (t , n) => t + n)

    if (sum % 2 == 0) {
        return "pari"
        
    }else 
    return "dispari"
    
}

console.log(pariDispari([23,17,24,26]));



//21

function dec(array) {

  return parseInt(array.join(""),2)
    
}

console.log(dec([1,0]));



//22

function yEx(string){

    return  string.split("").filter(el => el =="X").length == string.split("").filter(el => el =="y").length

}


console.log(yEx("xxyyx"));

//23

function voc (string, vocal) {

    return string.replace(/[aeiou]/gi,vocal)
}

console.log(voc("ciao a tutti ","e"))



//24

function soloNumeri(array){

    return array.filter(el => typeof el == "number")
}

console.log(soloNumeri([1 ,2,3,"a",4]));


//25

function reverceString(string) {

    return string.split("").reverse().join("")
}

function palin(string) {

    return string == reverceString(string)
    
}

console.log(palin("salame"));

//26

function stat(array) {
    
    let media= array.reduce((t,n ) => t+n) / array.length

   let deriva= Math.sqrt(array.map(el => (el - media)**2).reduce((t,n)=> t+n)/array.length).toFixed(2)

    return `la media è ${media} la deviazione è ${deriva}`
}

console.log(stat([3,3]));

//27

function sommaMedia(array){

     let somma = array.reduce((t,n) => t+n)
    let media = somma / array.length 

    if ( somma % 2 == 0){
        return somma
    }else{
        return media
    }

    
}
console.log(sommaMedia([1,4,3,3]));




//28

function pariODispari() {

   let inserito = prompt("inserire un numero")

   let pari

   (inserito % 2 == 0 )? pari = "E' pari": pari= "E' dispari"

   alert(pari)
    
}
pariODispari()

//appare sul browser i campo dove inserire il numero



//29

function somma(num) {

    let sum = 0

    for (let i = 1; i <= num; i++) {
       
        sum += i
    }
    return sum
    
}
console.log(somma(100));


//30

function prodScal(array1, array2) {
  
    if (array1.length != array2.length) return "Array di diversa lunghezza sorry :("

    let sum = 0

    for (let i = 0; i < array1.length; i++) {
       
        sum += (array1[i]* array2[i])
        
    }
    return sum


    
}

console.log(prodScal([1,3,5,6],[4,1,9,1]));

//31

 function conto(string) {

  let chiavi = Array.from(new Set(string.split("")))

  return Object.fromEntries(chiavi.sort().map(el => [el , string.split("").filter(i => i == el).length]))
     
 }

 console.log(conto("ciao a tutti credo di non funzionare"));
 

 //32

 function bits(num) {
     return num.toString(2).replace(/0/g,"").length
     
 }

 console.log(bits(42))


//33

function filtroNome(array, num = 5) {

    return array.filter(el => el.length == num).sort()

}

console.log(filtroNome(["Gigi", "Tizio", "Caio", "Piero"]))



//34


function numeroIntero2(num) {

    let list = []

    function numeroIntero(num) {

        for (let i = 2; i < num; i++) {
            if (num % i == 0 ) return false
        }
        return num > 1
    }




    for (let i = 2 ;i <= num; i++) {

        if (numeroIntero(i)) list.push(i)
    }

    return list
}


console.log(numeroIntero2(500));


//35

function primNum(num) {

    let final = []

    for (let i = 1; i < num; i++) {
        
        if( num % i == 0 ) final.push(i)
        
    }
    return final
    return final.length == 0
    
}

console.log(primNum(100));


//36


function pasCheck(string) {

    let len = string.length >= 6

    let num = Boolean(string.match(/[0-9]/g))

    let uni = Array.from(new Set(string.split(""))).length == string.length

    return len && num && uni
   
}

console.log(pasCheck("a1sdfrtv"));


//37

function ritornoElementi(array){

    
    return  array.filter(el =>!array.includes(-el))[0]

}

console.log(ritornoElementi([-3 ,1 ,2 ,3 ,-1 ,4,-2])); 


//38

function quadrati(num) {

    let string = num.toString()

    let result = []

    for (let i = 0; i < string.length; i++) {
        
        result[i]= string[i]*string[i]

    }

    return +result.join("")
    
}

console.log(quadrati(372))

//39

function arr2(array1,array2){

  return Array.from(new Set (array1.concat(array2).sort((a,b)=> b-a)))
}

console.log(arr2([3,4],[1,2,5,4]));



//40

function ordine(string) {

    return string
    .split(" ")
    .map(word=>{
        let number = Number(Array.from(word).filter(i => Number(i)))
        return [number,word]
    })
    .sort((pair1,pair2) => pair1[0] - pair2[0])
    .map(el => el[1])
    .join(" ")

}

console.log(ordine("is2 Thi1s t4est 3a"));


//41

function isogramma(string) {

    return Array.from(new Set(string.toLowerCase().split(""))).length == string.length
    
}

console.log(isogramma(""));



//42

function dif(a,b){

    return a.filter(el=> !b.includes(el))
}

console.log(dif([1,2,3,4],[1,2]));

//43

function natale(){

    let oggi = new Date()
    let natale =  new Date("december 25,2021")

    return Math.round((natale - oggi)/(1000 * 60 * 60 * 24))

}
console.log(natale());

//44

function bho(array) {

   let string= array.toString().replace(/,/g,"")

   return `(${string.substr(0,3)}) ${string.substr(3,3)}-${string.substr(6)}`
    
}

console.log(bho([1,2,3,4,5,6,7,8,9,0]));



//45

function simili(array) {

    return (array.filter(el=> el != array[0]).length ==1) ? array.filter(el=> el != array[0])[0] : Number(array[0])


    
}

console.log(simili([1,5,5,5,5,5,5]))

//46

function venerdi17(year) {

    let start = new Date(year,0,1)
    let final = []


    let len = ( year % 400 ==0 || (year % 4 == 0 && !(year % 100== 0))) ? 366  : 365;

    for (let i = 0; i <= len; i++) {
       let day = new Date ( +start + i*1000*60*60*24)
       if (day.getDate()== 17 && day.getDay()== 5)  final.push(day)
           
       
        
    }
    return final
}
    
//console.log(venerdi17(2021))

function annoPiu17(startYear){

    let today = new Date()
    let final=[]

    for (let i = startYear; i <= today.getFullYear(); i++) {

        final.push([i,venerdi17(i).length])
       
    }

    let max= final.sort((a,b)=> a[1]-b[1])[final.length -1 ][1]

    let filtro = final.filter(el => el [1]== max)

    return filtro


}

console.log(annoPiu17(1980));


// 47

function fibolunga(n) {
    let arr = [1,1]

    for (let i = 2; i < n ; i++) {
       
        arr.push( arr[i-2]+ arr[i-1])
        
    }

    console.log(arr);

    let rapporti =[]

    for (let i = 1; i < n; i++) {
       
        rapporti.push( +(arr[i])/ arr[i-1]).toFixed(5)
    }
    console.log(rapporti);

    let differenze = []

    for (let i = 0; i < rapporti.length; i++) {
        
        differenze.push((rapporti[i]-rapporti[i-1]).toFixed(10))
        
    }
    console.log(differenze);
}
fibolunga(20)

*/

//48


// let a = ['a', 'b', '2'];
// let b = ['1', '3', 'f'];


// let c = a.concat(b).sort((a,b)=> b - a);

// console.log(c);


//kata

//  let arr = [3, 4, 4, 3, 6, 3]

// function solve($arr) {

//     return array_reverse(array_unique(array_reverse($arr)));
//   }






// function Morracinese ($p1, $p2) {
//     if ($p1 === $p2) {
//         return 'Draw!';
//     }
//     if ($p1 === 'rock' && $p2 === 'scissors' ||
//         $p1 === 'scissors' && $p2 === 'paper' ||
//         $p1 === 'paper' && $p2 === 'rock') {
//         return 'Player 1 won!';
//     } else {
//         return 'Player 2 won!';
//     }
// }

// console.log(Morracinese('paper','rock'));




