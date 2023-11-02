import dbcon  # Database Connection

cursor = dbcon.db.cursor()

firstname = "John"
lastname = "Doe"
email = "johndoe@email.com"

# Define the data to insert
# data_to_insert = ("John", "Doe", "johndoe@email.com")
data_to_insert = (firstname, lastname, email)

# SQL query to insert data
insert_query = "INSERT INTO admin (first_name, last_name, email_id) VALUES (%s, %s, %s)"

try:
    cursor.execute(insert_query, data_to_insert)
    dbcon.db.commit()
    print("Data inserted successfully")
except dbcon.mysql.connector.Error as err:
    print("Error: {}".format(err))
    dbcon.db.rollback()

# Close the cursor and the database connection
cursor.close()
dbcon.db.close()
