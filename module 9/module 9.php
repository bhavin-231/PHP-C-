 Q-1:Explain ORM   [Object Relational Model ]
Object Relational Mapping (ORM) is a technique used in creating a "bridge" between object-oriented programs and, in most cases, relational databases.
Put another way, you can see the ORM as the layer that connects object oriented programming (OOP) to relational databases.  
      When interacting with a database using OOP languages, you'll have to perform different operations like creating, reading, updating, and deleting (CRUD) data from a database. By design, you use SQL for performing these operations in relational databases.
While using SQL for this purpose isn't necessarily a bad idea, the ORM and ORM tools help simplify the interaction between relational databases and different OOP languages.


Q-2:Explain -  Eloquent Relationships:
Eloquent relationships are defined as methods on your Eloquent model classes. Since, like Eloquent models themselves, relationships also serve as powerful query builders, defining relationships as methods provides powerful method chaining and querying capabilities. For example, we may chain additional constraints on this posts relationship:
{\pntext\f7\'B7\tab}{{\field{\*\fldinst{HYPERLINK "https://laravel.com/docs/5.1/eloquent-relationships"}}{\fldrslt{\ul\cf2 One To One}}}}\f2\fs32\par
{\pntext\f7\'B7\tab}{{\field{\*\fldinst{HYPERLINK "https://laravel.com/docs/5.1/eloquent-relationships"}}{\fldrslt{\ul\cf2 One To Many}}}}\f2\fs32\par
{\pntext\f7\'B7\tab}{{\field{\*\fldinst{HYPERLINK "https://laravel.com/docs/5.1/eloquent-relationships"}}{\fldrslt{\ul\cf2 Many To Many}}}}\f2\fs32\par
{\pntext\f7\'B7\tab}{{\field{\*\fldinst{HYPERLINK "https://laravel.com/docs/5.1/eloquent-relationships"}}{\fldrslt{\ul\cf2 Has Many Through}}}}\f2\fs32\par
{\pntext\f7\'B7\tab}{{\field{\*\fldinst{HYPERLINK "https://laravel.com/docs/5.1/eloquent-relationships"}}{\fldrslt{\ul\cf2 Polymorphic Relations}}}}\f2\fs32\par

\pard\sa160\sl259\slmult0 {{\field{\*\fldinst{HYPERLINK "https://laravel.com/docs/5.1/eloquent-relationships"}}{\fldrslt{\ul\cf2 Many To Many Polymorphic Relations}}}}


Q-3: What is  Eager  Loading and Lazy Loading ?
What is Eager Loading? :

When you are fetching any models from the database and then doing any type of processing on the model\rquote s relations, it\rquote s important that you use\~{{\field{\*\fldinst{HYPERLINK "https://laravel.com/docs/8.x/eloquent-relationships"}}{\fldrslt{\ul\cf2 eager loading}}}}\f3\fs32 . Eager loading is super simple using Laravel and basically prevents you from encountering the N+1 problem with your data. This problem is caused by making N+1 queries to the database, where N is the number of items being fetched from the database. To explain this better and give it some context, let's check out the example below.\par
Imagine that you have two models (\f4 Comment\f3\~and\~\f4 Author\f3 ) with a one-to-one relationship between them. Now imagine that you have 100 comments and you want to loop through each one of them and output the author\rquote s name.
     
 The code above would result in 101 database queries because it the results are "lazy loaded"! The first query would be to fetch all of the comments. The other one hundred queries would come from getting the author\rquote s name in each iteration of the loop. Obviously, this can cause performance issues and slow down your application. So, how would we improve this?\par
By using eager loading, we could change the code to say: As you can see, this code looks almost the same and is still readable. By adding the\~\f4 ::with('authors')\f3\~this will fetch all of the comments and then make another query to fetch the authors at once. So, this means that we will have cut down the query from.

  Lazy Loading :

Lazy loading is the practice of delaying load or initialization of resources or objects until they\rquote re actually needed to improve performance and save system resources. For example, if a web page has an image that the user has to scroll down to see, you can display a placeholder and lazy load the full image only when the user arrives to its location.

The benefits of lazy loading include:
Reduces initial load time \f6\endash  Lazy loading a webpage reduces page weight, allowing for a quicker page load time.
Bandwidth conservation \endash  Lazy loading conserves bandwidth by delivering content to users only if it\rquote s requested.
System resource conservation \endash  Lazy loading conserves both server and client resources, because only some of the images, JavaScript and other code actually needs to be rendered or executed.