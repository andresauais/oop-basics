# oop-basics
**What is object-oriented programming in general terms?**
- Is a programming paradigm based on the concept of "objects", which can contain data and code: data in the form of fields (often known as attributes or properties), and code, in the form of procedures (often known as methods).
\**What is a class?**
- the definitions for the data format and available procedures for a given type or class of object; may also contain data and procedures (known as class methods) themselves, i.e. classes contain the data members and member functions
**What is an object?**
- instances of classes
**What is an instance?**
- any time a new context is created based on some model, it is said that the model has been instantiated. In practice, this instance usually has a data structure in common with other instances, but the values stored in the instances are separate. Changing the values in one instance will then not interfere with the values of some other instance.
**What is a property?**
- data in the form of fields
**What is a method?**
- is a procedure associated with a message and an object.
**What is the difference between a function and a method?**
- A method, like a function, is a set of instructions that perform a task. The difference is that a method is associated with an object, while a function is not.
**What is a constructor?**
- is a special type of subroutine called to create an object. It prepares the new object for use, often accepting arguments that the constructor uses to set required member variables.
**What is the difference between a class, an object and an instance?**
- A class is a blueprint which you use to create objects. An object is an instance of a class - it's a concrete 'thing' that you made using a specific class. So, 'object' and 'instance' are the same thing, but the word 'instance' indicates the relationship of an object to its class.
**What do we understand by the concept of encapsulation?**
- Encapsulation is an object-oriented programming concept that binds together the data and functions that manipulate the data, and that keeps both safe from outside interference and misuse.
**What do we understand by the concept of abstraction?**
- Its main goal is to handle complexity by hiding unnecessary details from the user. That enables the user to implement more complex logic on top of the provided abstraction without understanding or even thinking about all the hidden complexity.
**What do we understand by the concept of inheritance?**
- Inheritance is the mechanism of basing an object or class upon another object (prototype-based inheritance) or class (class-based inheritance), retaining similar implementation.
**What do we understand by the concept of polymorphism?**
- Is when calling code can be agnostic as to which class in the supported hierarchy it is operating on – the parent class or one of its descendants. Meanwhile, the same operation name among objects in an inheritance hierarchy may behave differently.
**What do we understand by the concept of Overload?**
- occurs when two or more methods in one class have the same method name but different parameters.
**What do we understand by the concept of Override?**
- occurs when two methods have the same method name and parameters. One of the methods is in the parent class, and the other is in the child class. Overriding allows a child class to provide the specific implementation of a method that is already present in its parent class.​
**What differences exist between the concept of Overload and Override?**
1. Overriding implements Runtime Polymorphism whereas Overloading implements Compile time polymorphism
2. The method Overriding occurs between superclass and subclass. Overloading occurs between the methods in the same class.
3. Overriding methods have the same signature i.e. same name and method arguments. Overloaded method names are the same but the parameters are different.
4. With Overloading, the method to call is determined at the compile-time. With overriding, the method call is determined at the runtime based on the object type.
5. If overriding breaks, it can cause serious issues in our program because the effect will be visible at runtime. Whereas if overloading breaks, the compile-time error will come and it’s easy to fix.
**What is a static class?**
- A static class cannot be instantiated, and can contain only static members. Hence, the calls for a static class are as: MyStaticClass.MyMethod(...) or MyStaticClass.MyConstant. A non static class can be instantiated and may contain non-static members (instance constructors, destructor, indexers).
**Look for 3 advantages over object-oriented programming compared to other programming paradigms**
1. Improved software-development productivity
2. Improved software maintainability
3. Faster development
**Look for disadvantages of this paradigm.**
1. Steep learning curve
2. Larger program size
3. Slower programs
4. Not suitable for all types of problems
