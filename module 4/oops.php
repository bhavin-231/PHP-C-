 Q1 What is object oriented programming?
ANS:Object-oriented programming (OOP) is a computer programming model that organizes software design around data, or objects, rather than functions and logic. An object can be defined as a data field that has unique attributes and behavior.


Q-2  What Are Properties Of Object Oriented Systems? 
ANS:    Objects \f2\u8722?\f0  An object is something that is exists within problem domain and can be identified by data (attribute) or behavior. All tangible entities (student, patient) and some intangible entities (bank account) are modeled as object.

  They describe information about the object.
Behavior   It specifies what the object can do. It defines the operation performed on objects.
Class   A class encapsulates the data and its behavior. Objects with similar meaning and purpose grouped together as class.
Methods   Methods determine the behavior of a class. They are nothing more than an action that an object can perform.
Message   A message is a function or procedure call from one object to another. They are information sent to objects to trigger methods. Essentially, a message is a function or procedure call from one object to another.


Q-3 What Is Difference Between Class And Interface?
ANS: A class can inherit another class while interface cannot inherit another class.

Q-4  What Is Overloading? 
 ANS:Overloading in PHP provides means to dynamically create properties and methods. These dynamic entities are processed via magic methods one can establish in a class for various action types.The overloading methods are invoked when interacting with properties or methods that have not been declared or are not visible in the current scope. The rest of this section will use the terms inaccessible properties and inaccessible methods to refer to this combination of declaration and visibility.All overloading methods must be defined as public.


Q-5 What Is T_PAAMAYIM_NEKUDOTAYIM (Scope Resolution Operator (::) with Example. 
ANS:The Scope Resolution Operator (also called Paamayim Nekudotayim) or in simpler terms, the double colon, is a token that allows access to static, constant, and overridden properties or methods of a class.When referencing these items from outside the class definition, use the name of the class.It's possible to reference the class using a variable. The variable's value can not be a keyword (e.g. self, parent and static). 


Q-6  What are the differences between abstract classes and interfaces? 
ANS:The Abstract class and Interface both are used to have abstraction. An abstract class contains an abstract keyword on the declaration whereas an Interface is a sketch that is used to implement a class.


Q-7  Define Constructor and Destructor?
ANS:Constructor is used to initialize an object of the class and assign values to data members corresponding to the class. While destructor is used to deallocate the memory of an object of a class.
 

Q-8  How to Load Classes in PHP? 
ANS: PHP can load class files automatically on demand (No explicit require statements are needed);
The file name must match the case of the terminating class name (each class in a separate file);
The directory name must match the case of the namespace names; 


 Q-9  How to Call Parent Constructor? 
ANS:  In order to run a parent constructor, a call to parent::__construct() within the child constructor is required. If the child does not define a constructor then it may be inherited from the parent class just like a normal class method (if it was not declared as private)


Q-10 Are Parent Constructor Called Implicitly When Create An ObjectOf Class?
ANS: Parent constructors are not called implicitly if the child class defines a constructor. In order to run a parent constructor, a call to parent::__construct() within the child constructor is required. If the child does not define a constructor then it may be inherited from the parent class just like a normal class method (if it was not declared as private). 


Q-11 What Happen, If Constructor Is Defined As Private Or Protected? 
ANS: A private constructor is used to prevent the direct creation of objects from the class.The expensive process is performed within the private constructor.The only way to create an instance from the class is by using a static method that creates the object only if it wasn't already created.


Q-12 What are PHP Magic Methods/Functions? List them Write program for Static Keyword in PHP?
ANS: The following method names are considered magical:\par
 __construct(), __destruct(), __call(), __callStatic(), __get(), __set(), __isset(), __unset(), __sleep(), __wakeup(), __serialize(), __unserialize(), __toString(), __invoke(), __set_state(), __clone(), and __debugInfo(). 
