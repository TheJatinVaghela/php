<!-- Q - 1 -->
<!-- 
 ORM stands for Object-Relational Mapping. It is a programming technique and a concept used in software development to bridge the gap between the relational database systems (like MySQL, PostgreSQL, SQLite) and the object-oriented programming languages (like PHP, Java, Python). The primary goal of ORM is to simplify the interaction between the application code and the database by allowing developers to work with objects in their programming language rather than dealing directly with database tables and SQL queries.

Here are key aspects and benefits of ORM:

    Object-Oriented Representation:
        ORM allows developers to represent database entities as objects in their programming language. Each table in the database is represented by a corresponding class, and each row in the table is an instance of that class.

    Abstraction of Database Operations:
        ORM provides a high-level abstraction over database operations. Developers can interact with the database using methods and properties of objects, without having to write raw SQL queries.

    Automatic Mapping:
        ORM frameworks automatically map the attributes (fields or columns) of an object to the columns in a database table. This mapping is typically done through configuration or conventions.

    CRUD Operations:
        ORM simplifies the creation, retrieval, updating, and deletion (CRUD) operations. Developers can perform these operations using familiar object-oriented syntax, making code more readable and maintainable.

    Database Independence:
        ORM abstracts the specific details of the underlying database system. This allows developers to write code that is independent of the database type, making it easier to switch between different database systems without changing the application code.

    Relationship Handling:
        ORM frameworks handle relationships between entities. For example, if there is a one-to-many relationship between two tables, the ORM can provide methods to easily navigate and manipulate these relationships.

    Query Language:
        ORM frameworks often provide a query language or methods that abstract the underlying SQL queries. This helps developers express complex queries using the programming language itself, making it more readable and maintainable.

    Consistency and Validation:
        ORM frameworks often include features for data validation and enforcing constraints, ensuring that data in the application remains consistent with the defined data model.

Popular ORM frameworks in different programming languages include:

    PHP: Eloquent (Laravel), Doctrine (Symfony).
    Java: Hibernate (Java), EclipseLink (Java).
    Python: Django ORM (Django), SQLAlchemy (general-purpose).

In summary, ORM is a powerful concept that simplifies database interaction by allowing developers to work with objects in their programming language, providing a higher level of abstraction and making code more maintainable and database-independent.
 -->

<!-- Q - 3 -->
<!-- 
Eloquent Relationships are a powerful feature in the Laravel PHP framework, providing an elegant and expressive way to define and work with relationships between database tables. Eloquent is Laravel's own ORM (Object-Relational Mapping) system, and it allows you to interact with your database using object-oriented syntax. Relationships in Eloquent allow you to define connections between different models, making it easy to query related data and perform operations on associated records.

There are several types of Eloquent Relationships:
1. One-to-One Relationship:
// User model
return $this->hasOne(Profile::class);
// Profile model
return $this->belongsTo(User::class);

2.One-to-Many Relationship:
// User model
 return $this->hasMany(Post::class);
// Profile model
return $this->belongsTo(User::class);

3.Many-to-Many Relationship:
// User model
  return $this->belongsToMany(Role::class)
// Profile model
 return $this->belongsToMany(User::class);

 4.Has-Many-Through Relationship:
 return $this->hasManyThrough(Post::class, User::class);

 5.Polymorphic Relationships:
 // Comment model
 return $this->morphTo();
 // Post model
return $this->morphMany(Comment::class, 'commentable');
 // Video model
 return $this->morphMany(Comment::class, 'commentable');

6.Has-One-Through Relationship:
// Doctor model
return $this->hasOneThrough(License::class, Hospital::class);
 -->

 <!-- Q - 4 -->
<!-- 
    Eager Loading:
        Eager Loading is the practice of loading the related data along with the main data in a single query.
        It helps to minimize the number of database queries, especially in scenarios where you need to load a
        set of records and their related data.
    
        In Laravel's Eloquent, you can use the with method to specify the relationships that should be eager
        loaded:
        // Eager loading the "comments" relationship along with the posts
        $posts = Post::with('comments')->get();

        Eager loading is beneficial in scenarios where you are fetching a collection of records and want to
        retrieve their related data without issuing additional queries for each record. 
        This helps to prevent the N+1 query problem, where N additional queries are executed to fetch
        related data for N records.
    
    Lazy Loading:
        Lazy Loading is the opposite approach where related data is only loaded when it is explicitly 
        requested. In other words, related records are fetched from the database on-the-fly, as you access 
        the relationship. While this can lead to more queries being executed, it can be more efficient when
        you only need a subset of the related data.

        in Laravel, lazy loading is the default behavior when accessing relationships:
        // Lazy loading the "comments" relationship for a specific post
        $post = Post::find(1);
        $comments = $post->comments;

        Lazy loading is useful when you want to keep your initial query lightweight and load additional data 
        only when needed. However, if you have a loop that accesses relationships for multiple records, it can
        lead to the N+1 query problem if not handled properly.
    
    Summary:
        Eager Loading: Load related data in a single query along with the main data. Reduces the number 
        of queries but may load more data than needed.

        Lazy Loading: Load related data on-the-fly, as it is accessed. More queries may be executed,
        but only necessary data is loaded.
 -->