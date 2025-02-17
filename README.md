Project goal is to learn web development using PhP and Laravel framework

Commands:
php artisan tinker 
$book = Book::find(1); to get a book with id = 1 from database and print in console
$reviews = $book->reviews; to get the book (id=1) reviews
$book->load('reviews'); to get the book (id=1) reviews
Book::with('reviews')->find(2); to get a book with id = 2 and all its reviews
$books = Book::with('reviews')->take(3)->get(); to get first 3 books with their reviews

$review = Review::find(2); to get a review with id = 2
$review->book; to get a book that has the review with id = 2 

$book = Book::find(1); to get book id=1
$book2 = Book::find(2); to get book id=2
$book2->reviews()->save($review); move the review from book id=1 to book id=2

creating a review:
php artisan tinker
$book = Book::find(1)
$review = new Review();
$review->review = 'This was fine';
$review->rating = 3;
$book->reviews()->save($review); one way to save a new review to database
$review->book_id = 1; $review -> save(); another way to save a new review

After adding: protected $fillable = ['review', 'rating']; to Review.php
$book = Book::find(1)
$review = $book->reviews()->create(['review' => 'Sample review', 'rating' => 5]); creates and saves review

