function funCall(){

    var myArray = [
        {name: 'The Hobbit', id: 1, genre: 'Fantasy', image: 'image/book-1.png'},
        {name: 'The Hobbit', id: 1, genre: 'Fantasy', image: 'image/book-1.png'},
        {name: 'The Hobbit', id: 1, genre: 'Fantasy', image: 'image/book-1.png'},
        {name: 'The Hobbit', id: 1, genre: 'Fantasy', image: 'image/book-1.png'},
        {name: 'The Hobbit', id: 1, genre: 'Fantasy', image: 'image/book-1.png'},
        {name: 'The Hobbit', id: 1, genre: 'Fantasy', image: 'image/book-1.png'},
        {name: 'The Hobbit', id: 1, genre: 'Fantasy', image: 'image/book-1.png'},
        {name: 'The Hobbit', id: 1, genre: 'Fantasy', image: 'image/book-1.png'},
        {name: 'The Hobbit', id: 1, genre: 'Fantasy', image: 'image/book-1.png'},
        {name: 'The Hobbit', id: 1, genre: 'Fantasy', image: 'image/book-1.png'},
        {name: 'The Hobbit', id: 1, genre: 'Fantasy', image: 'image/book-1.png'},
        {name: 'The Hobbit', id: 1, genre: 'Fantasy', image: 'image/book-1.png'},
        {name: 'The Hobbit', id: 1, genre: 'Fantasy', image: 'image/book-1.png'} 
    ]
    var htmlImg = "<table border= '1|1'>"

    setTimeout(() => {
        
        for (var i = 0; i < myArray.length; i++){
            htmlImg+='<tr>';
            htmlImg+='<td>'+myArray[i].name+'</td>';
        }
        document.getElementById("table").innerHTML = html
    }, 500);
}

funCall