// // 

// const matrix=[[1,1],
//               [2,1]]

// var result= [3, 4]

// function deter(m1){
// var mul1=m1[0][0]*m1[1][1];
// var mul2=m1[1][0]*m1[0][1];
// var determinannt = mul1-mul2;

// console.log("Determinant of " +m1 +" is:"+ determinannt);
// return determinannt;

// }
// console.log(deter(matrix));
 
//  if  (deter(matrix) == 0){
//    console.log("ERROR: DETERMINANT = 0 ")
  
//  }

//  function v_x(matrix){
//   const r1x = matrix[0].slice();
//   const r2x = matrix[1].slice();
//   const row = [r1x, r2x]

//     r1x[0] = result[0]
//     r2x[0] = result[1]
    
//     let xvalue = deter(row);
//     xvalue = xvalue / deter(matrix)
//     console.log(xvalue)
// }



// function v_y(matrix){
//   const r1y = matrix[0].slice(0);
//   const r2y = matrix[1].slice(0);
//   const row = [r1y,
//                r2y]
//     r1y[1] = result[0]
//     r2y[1] = result[1]
//     let vy = deter(row);
//     vy = vy / deter(matrix)
//     console.log(vy)
//     }


//     v_x(matrix);
//     v_y(matrix);


// var name = window.prompt("Enter your name: ");
// alert("Your name is " + name);


const arr1 = [1, 1];
const arr2 = [2, 1];    
const arr3 = [3, 4];    


 function deter(){
     var mul1= arr1[0] * arr2[1] ;
     var mul2=  arr1[1]* arr2[0];
     var determenent= mul1-mul2;

     console.log("Your determinent is "+ determenent);
     return determenent;
 }
 console.log(deter());

// Matrix One -------------------------------------------- 

function Matrix_1(){
                                   // const---------------------    arr3   arr2 ---------------------
                                                                //  = [3, 1]; 
                                                                 // = [4, 1];   3 - 4 = -1/
                                                                                                                                            
  var mt1=  arr2[0] * arr3[1] ;
  var mt2=  arr2[1]* arr3[0];
  var dx= mt1-mt2;

    //console.log("Your determinent is "+dx);

   var container= dx/deter();
   console.log("Your dx is "+ container);
 return container;
 }
 console.log(Matrix_1());


// Matrix 2----------------------------------------------------

function Matrix_2(){

  var mt1=  arr3[0] * arr1[1] ;
  var mt2=  arr3[1]* arr1[0];
  var dx= mt1-mt2;

    //console.log("Your determinent is "+dx);

   var container2= dx/deter();
   console.log("Your dy is "+ container2);
 return container2;
 }
 console.log(Matrix_2());


