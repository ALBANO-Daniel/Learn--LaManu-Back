// to get menu navigation List of exercices
const list = document.querySelectorAll('li')
// to get all the exercices div
const exes = document.querySelectorAll('.exe')

list.forEach( element => 
    element.addEventListener('click' , (e) => {
        highlightOnlySelectedElement(list, element)
        exes.forEach( element => element.style.display = 'none')  // hide previous question
        exes[e.target.textContent].style.display = 'block' // display the selected section 
    })
);

// highlight a single {element} in a list of {elements}
const highlightOnlySelectedElement = (elements, element) => {
        elements.forEach( el => el.style.background = 'none')
        element.style.background = 'grey'
} 
// not worked in PHP, php you better change the array of getdate() call

// var fake_date = new Date("October 6, 2016 11:13:00");

// //overriding date function
// Date = function(){return fake_date;};
// var new_date = new Date();
// alert(new_date);

