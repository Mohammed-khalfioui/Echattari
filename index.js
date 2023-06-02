// let display = document.getElementById('display');


// let buttons = Array.from(document.getElementsByClassName('button'));
// let deleteButton = document.getElementById('delete');
// buttons.forEach(button => {
//     button.addEventListener('click', (e) => {
//         switch(e.target.innerText) {
//             case 'C':
//                 display.value = '';
//                 break;
//             case 'Delete':
//                 let currentValue = display.value;
//                 display.value = currentValue.slice(0, -1); 
//                 break;
//             default:
//                 display.value += e.target.innerText; 
                
//                 console.log(display.value);
                 
//         }
//     }); 
  
  
// });
let display = document.getElementById('display');
        let buttons = Array.from(document.getElementsByClassName('button'));
        let deleteButton = document.getElementById('delete');
        
        buttons.forEach(button => {
            button.addEventListener('click', (e) => {
                switch(e.target.innerText) {
                    case 'C':
                        display.value = '';
                        break;
                    case 'D':
                        // let currentValue = display.value;
                        // display.value = currentValue.slice(0, -1); 
                        if (display.value){
                            display.value = display.value.slice(0, -1);
                         }
                        break;
                    default:
                        display.value += e.target.innerText; 
                        console.log(display.value);
                }
            });
        });

