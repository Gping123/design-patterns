
>> * 装饰器模式 (Decorator)   
>>> - 定义   
&emsp; 允许向一个现有的对象添加新的功能，同时又不改变其结构。这种类型的设计模式属于结构型模式，它是作为现有的类的一个包装。
这种模式创建了一个装饰类，用来包装原有的类，并在保持类方法签名完整性的前提下，提供了额外的功能。    
我们通过下面的实例来演示装饰器模式的用法。其中，我们将把一个形状装饰上不同的颜色，同时又不改变形状类。  
>>> - 优点      
&emsp; 1、装饰类和被装饰类可以独立发展，不会相互耦合，装饰模式是继承的一个替代模式，装饰模式可以动态扩展一个实现类的功能。      
>>> - 缺点      
&emsp; 1、扩展一个类的功能  
&emsp; 2、动态增加功能，动态撤销    
