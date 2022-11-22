@foreach($list_of_books as $single_book)
This is the book name {{single_book->Book_Name}}
<p>
    The ISBN_NO is: {{$single_book->ISBN_NO}} and
    the year of publication is: {{$single_book->Y_O_Pub}}


</p>