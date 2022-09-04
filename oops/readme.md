##Access modifier 

1) public : 
->accessible from self class, inherit class, and from object

2) protect :
->accessible from self class, inherit class, but not from object

3) private :
->accessible from self class only


## property & Method overriding
->create same name of property  and methods  in base class and derived class then if we call that method or property  using derived class object then method or property is called of derived class


## Abstraction

->Use for provide only that thing which  important for running task and hide the what is process  behind the hood
->Not directly  access from the object

1) Use abstract  keyword before  class and abstract  before  method for abstract  method 
2) Abstract  class must have at least  one abstract  method which  just declare but not implement 
3) must implement abstract  method where we inherit the abstract  class
4) we can also add normals functions  in abstract  class and use it inside inheritance

## Interfere 

->In php we can not directly use the multiple inheritance so we use interface for that
->use keyword interface instead  of class  and don't assign any access modifier to any methods
->ex.  class myclass implements interface1,interface2{ ... }

1) we can not define  property  in interface 
2) we just declare the methods in inheritance just like abstract  class
3) Must implement  all the methods  of interface  in base class 


## Static class

->class that all method  and property  are static we called this class  static class
->use "parent" keyboard for access parents  variable  or method in child class 
ex. 
parent::$name;

->Late static binding:  when we extents class and both class have common properly let say "$name" and if we call function of parents class that access the that "name" property then we can not use child class  property  using  self so for that we use "static" keyword to achieve  this

ex. static::name


## Traits

->write  common cdoe for different  class  without inheritance 
->similar  to class  we can access all function of tait by use it inside  class
->if base class, parent class  and  trait have same named method then
first priority is "base self calss" then "trait" and then "parents  class" method 

---------------------------------
->ex.

trait tname{
   public function hello(){...}
}

class  A {
   use tname;
}
----------------------------------

->if we have multiple  trait with same name function then we can access this by insteadof  or as keyboard

----------------------------------
use trait1 ,trait2{
   trait1::common_method insteadof trait2,
   trait2::common_method as t1method;
   trait1::private_method as public //access private method by alias public;
}

---------------------------------