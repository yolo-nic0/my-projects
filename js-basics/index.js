console.log('Hello World!');
let name = 'what up';
console.log(name);
let selectedClors = ['red', 'blue'];
selectedClors[2] = 'green';
console.log(selectedClors);
function greet(name1, lastName) {
    console.log('Hello ' + name1 + ' ' + lastName);
}
    greet('john');
    greet('john', 'Merfy');

function square(num) {
    return num * num;
}
console.log(square(6));

let circle = {
    radius: 2,
    diameter: 6,
    location: {
        x: 1,
        y: 3
    },
    draw: function(){
        console.log('dog way');
    }
};

circle.draw();