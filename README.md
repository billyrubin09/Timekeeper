# Timekeeper
Basic web application for simple employee timekeeping


The basic idea is that an employee can login on the website automatically creating a datetime stamp and recording this to the MySQL database unless the user already has clocked in. If this is the case, the application should return them the date and time they clocked in and a button to clock out. After clocking out, the application should notify the employer of the last recorded times for that employee. The employer should be the sole administrator and must verify the recorded times.

The MySQL schema is as follows:
*employees
*times

The fields in employees are as follows:
*id
*username

The fields in times are as follows:
*id
*time_in
*time_out
*verified
