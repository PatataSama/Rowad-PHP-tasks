<?php

/**
 * OOP
 * OOP stands for Object-Oriented Programming.
 *      OOP is faster and easier to execute
 *      OOP provides a clear structure for the programs
 *      OOP helps to keep the PHP code DRY "Don't Repeat Yourself", and makes the code easier to maintain, modify and debug
 *      OOP makes it possible to create full reusable applications with less code and shorter development time
 * 
 * Class
 * A class is a template for objects, and an object is an instance of class.
 * Classes are nothing without objects! We can create multiple objects from a class.
 * Each object has all the properties and methods defined in the class, but they will have different property values.
 * Objects of a class are created using the "new" keyword.
 * 
 * $this Keyword
 * The $this keyword refers to the current object, and is only available inside methods.
 * 
 * __construct Function
 * this a special function called constructor not a void or a return value function, just created automatically when creating a new object.
 * A constructor allows you to initialize an object's properties upon creation of the object.
 * If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
 * 
 * Access Modifiers
 * public - the property or method can be accessed from everywhere. This is default
 * protected - the property or method can be accessed within the class and by classes derived from that class
 * private - the property or method can ONLY be accessed within the class
 * 
 * Inheritance
 * Inheritance in OOP = When a class derives from another class.
 * The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
 * An inherited class is defined by using the "extends" keyword.
 * 
 * Overriding Inherited Methods
 * Inherited methods can be overridden by redefining the methods (use the same name) in the child class.
 * 
 * Abstract
 * Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
 * An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.
 * An abstract class or method is defined with the "abstract" keyword:
 * 
 * Interfaces
 * Interfaces allow you to specify what methods a class should implement.
 * Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".
 * Interfaces are declared with the "interface" keyword:
 * 
 * nterfaces vs. Abstract Classes
 * Interface are similar to abstract classes. The difference between interfaces and abstract classes are:
 * Interfaces cannot have properties, while abstract classes can
 * All interface methods must be public, while abstract class methods is public or protected
 * All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
 * Classes can implement an interface while inheriting from another class at the same time
 * 
 * To implement an interface, a class must use the "implements" keyword.
 *
