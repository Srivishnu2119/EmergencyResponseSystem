import dbconnectionpage  # Database Connection Page

# Get a database connection
db_conn = dbconnectionpage.get_database_connection()

cursor = db_conn.cursor()

firstname = "John22"
lastname = "Doe22"
email = "johndoe22@email.com"

# Define the data to insert
# data_to_insert = ("John", "Doe", "johndoe@email.com")
data_to_insert = (firstname, lastname, email)

# SQL query to insert data
insert_query = "INSERT INTO admin (first_name, last_name, email_id) VALUES (%s, %s, %s)"

try:
    cursor.execute(insert_query, data_to_insert)
    db_conn.commit()
    print("Data inserted successfully")
except db_conn.mysql.connector.Error as err:
    print("Error: {}".format(err))
    db_conn.rollback()

# Close the cursor and the database connection
cursor.close()
db_conn.close()
