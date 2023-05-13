# SQL Queries



-----

#### Write a query to find the third-highest salary from the Employerofo table.

```bash
SELECT * FROM EmployeeInfo ORDER BY salary DESC LIMIT 2,1;
```



-----

#### Write a query to find the Nth highest salary from the table without using TOP/limit keyword.

```bash
SELECT salary FROM employeeinfo e1
WHERE N = (SELECT COUNT(DISTINCT salary) FROM employeeinfo e2 WHERE e1.salary <= e2.salary);

```

-----

#### Wite SQL Query to find duplicate rows in table

```bash

SELECT *,COUNT(empid) FROM EmployeeInfo GROUP BY empid HAVING COUNT(empid) > 1;
```


-----

#### Write a query to calculate the even and odd records from a table.

```bash

->For EVEN

SELECT *FROM Employeeinfo WHERE MOD(EmpID,2)=0;

->For ODD

SELECT * FROM Employeeinfo WHERE MOD(EmpID,2)=1;

```

-----

#### Write a query to display the first and the last record from the EmployeeInfo table.

```bash
->For First record

SELECT * FROM Employeelnfo WHERE EmpID IN (SELECT MIN(EmpID) FROM EmployeeInfo);

->For Last record

SELECT * FROM Employeelnfo WHERE EmpID IN (SELECT MAX(EmpID) FROM EmployeeInfo);

```

-----

#### How do you copy all rows of a table using SQL query?
```bash

->CREATE TABLE EmpDetail AS SELECT * FROM EmployeeInfo;
->CREATE TABLE EmpSalary AS SELECT Empld, Salary FROM EmployeeInfo;
->CREATE TABLE EmpDetail AS SELECT * FROM EmployeeInfo WHERE 3=4;

```

-----

#### Write a query to retrieve the list of employees working in the same department.

```bash

Select DISTINCT E.EmpID, E.EmpFname, E.Department FROM EmployeeInfo E, Employeeinfo E1 
WHERE E.Department = E1.Department AND E.EmpID != E1.EmpID;

```

-----

#### Write a query to retrieve the last 3 records from the EmployeeInfo table.

```bash

SELECT * FROM (SELECT * FROM Employeelnfo ORDER BY EmpID DESC LIMIT 3)
temp ORDER BY EmpID ASC;

SELECT * FROM temp ORDER BY EmpID ASC;
```

-----

#### Write a query to fetch details of employees whose EmpLname ends with an alphabet 'A' and contains five alphabets.

```bash
=>
SELECT * FROM EmployeeInfo WHERE EmpLname LIKE '_______a';

```

-----

#### Write a query to delete the Duplicate record from employee_info table.

```bash

DELETE E1 FROM employee_info E1, employee_info E2 
WHERE E1.email = E2.email AND E1.Id > E2.Id;


```

-----

#### Write a query to retrieve the first four characters of Fmployee me from the employee_info table.

```bash
SELECT SUBSTRING(name, 1,4) FROM employee_info;

```

-----

#### Write a query find number of employees whose DOB is between 01/06/1995 to 30/06/1998 and are grouped according to gender

```bash

->If we pass date in YYYY-MM-DD format

SELECT COUNT(*), Gender FROM employee_info WHERE DOB
BETWEEN '1995-01-01' AND '1998-06-30"
GROUP BY Gender;

->If we pass date in different format

SELECT COUNT(*), Gender FROM employee_info WHERE DOB
BETWEEN STR_TO_TIME('1995/01/01',"%Y/%m/%d") AND STR_TO_TIME('1998/06/30',"%Y/%m/%d")
GROUP BY Gender;

```

-----

#### Write a query to fetch details of all employees excluding the employees who are 'HR' and 'Admin"

```bash

SELECT * FROM employee_info WHERE department NOT IN ('HR','Admin');

```

-----

#### Write a query to fetch 50% records from the employee_info table.

```bash
->Works fine when ID is in proper sequence i.e. no record deleted

SELECT * FROM employee_info WHERE Id <= (SELECT COUNT(Id)/2 FROM employee_info );

->When some records are deleted.

SET @count = (SELECT COUNT(Id)/2 FROM employee_info);
PREPARE STMT FROM 'SELECT * FROM employee_info LIMIT?';

EXECUTE STMT USING @count;

'SELECT * FROM employee_info LIMIT 4.5';
'SELECT * FROM employee_info LIMIT 5';

```

-----

#### Write a query to display the total salary of each employee after adding 10% increment in the Salary.

```bash

SELECT id,name, salary+(salary/10) as TotalSalary FROM employee_info;

```

-----

#### Write a query to retrieve two minimum and maximum salaries .

```bash
->For minimum Salary

SELECT DISTINCT salary FROM employee_info E1 WHERE 2 >= (SELECT COUNT(DISTINCT salary)
FROM employee_info E2 WHERE E1.salary >= E2.salary) ORDER BY E1.salary;

->For maximum Salary

SELECT DISTINCT salary FROM employee_info E1 WHERE 2 >= (SELECT COUNT(DISTINCT salary)
FROM employee_info E2 WHERE E1.salary <= E2.salary) ORDER BY E1.salary DESC;
```

-----

#### Write a query to fetch the employee name and replace the space with '-'.

```bash
SELECT REPLACE(name, '','-') FROM employee_info;
```
