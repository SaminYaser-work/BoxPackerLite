BoxPackerLite
=========

BoxPackerLite is a compact PHP library for solving the "4D" bin packing/knapsack problem (3D dimensions plus weight).
Given a list of items and available box sizes, it determines how many boxes are required and how items should be
packed while respecting physical dimensions and weight limits.

This is especially useful for e-commerce and logistics workflows, such as selecting the right parcel sizes for shipping
rates or estimating the number of labels to print.

Credit
------
This project is based on the original BoxPacker library by Doug Wright (dvdoug/boxpacker). This lite version removes
tests, docs, and logging dependencies to keep the package minimal while preserving core packing behavior.

License
-------
BoxPackerLite is MIT-licensed. 
