#  Congo

***Congo: the world's second largest rainforest after the Amazon rainforest, and soon to become the second largest online retail platform.***

Congo is a database-driven online retail control panel and ordering system. It tracks inventories of various types of products, accounting for sales and shipments to alter the inventory. The purpose of this project was to plan, construct and implement a database from scratch. 

Developed at the Ohio State University by **Ben Powell, Konrad Kappel, Jacob McCoy, and Jeremy Huang** in Fall 2018 for an assignment in CSE 3241 (Intro to Databases) with instructor Lin Chiu.

## Requirements
The number of items in stock goes up when new shipments arrive and goes down when orders are placed.

The company sets a base sale price on each type of product, which can be changed at any time and become effective immediately. 

The actual sale price of an item depends on how many are in stock at the time of the sale: 

- The price of an item increases (from the base price) when there are 10 or fewer items in stock. 
- When there only 10 items (of that product type) available, the next item will be sold at the base price +1%. 
- The last 9th item will be priced at base price +2%, the last 8th will be priced at the base price + 3%, and so on till they are all gone. So, the last item will be sold at base price + 10%.


Each shipment can include items from different product types; therefore, each line item contains the product type and the corresponding number of items included in the shipment. 

### Required Features:
1. Owner can add or change or delete the base price of a product type. For example, $8 for a ‘OSU mug’. The information added will become effective immediately. 
2. Owner can track shipment information such as the product type and its corresponding quantity. 
3. Owner can track customer information such as customer ID, name, address, phone. 4. Owner can track sales information including product type, sale price, invoice number, customer ID, tax and total. You can assume one item per sale order. (NOTE: BONUS points will be given if you allow more than one item on a sale order from the same or different product types.)
4. Owner can track the inventories that include product type and quantity. The quantity in stock should match the total items received (through shipments) minus the number of items sold.

## Development Stages

The project was divided into three parts, each part corresponding to a checkpoint and a submission.
- **Part 1.** Engage in the requirement discussions and work to finalize the requirements. Design the EER model for the database. Create detailed requirements & EER schema.
- **Part 2.** Map your EER to the relational data model. Deliver relational database schema & DDL for creating database in MySQL.
- **Part 3.** Implement the database in MySQL and user interfaces in PHP. The implementation should match the defined requirements.

To view the submissions for parts 1 and 2, refer to this repository's `doc` folder. 

The submission for part three consists of the completed database and functional site. Those things are located in `db` and `web/public_html`. To view the deployed site, refer to the deployment section.

## Deployment

The site was deployed after completion to provide a reference for the group members and a project showcase. A free web hosting service, 000webhost, was used to deploy the site. 

The deployment includes full functionality of the website and database.

Link: [https://congostore.000webhostapp.com/](https://congostore.000webhostapp.com/)



## Disclaimer

This project was designed and submitted for a class assignment at the Ohio State University. All material in this project is the original work of the authors, other than ideas and project requirements discussed in CSE 3241 lectures. To avoid academic misconduct, no material from this project is to be submitted for a class assignment by anyone other than the authors.
