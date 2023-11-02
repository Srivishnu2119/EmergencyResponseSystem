import mysql.connector

# Connect to the MySQL database
db = mysql.connector.connect(
    host="localhost",
    user="root",
    password="Charis@@2023$$",
    database="newcbc"
)

# Create a cursor object to interact with the database
cursor = db.cursor()

"""
# Multiple comments
try:
    # Create a MySQL database connection
   # connection = mysql.connector.connect(**db)

    # Check if the connection is established
    if db.is_connected():
        print("Connected to MySQL database")

        # Perform database operations here

    # Close the connection when done
    db.close()

except mysql.connector.Error as error:
    print("Error: ", error)

# Check if the connection is closed
if not db.is_connected():
    print("Connection is closed")

# You can also check connection status after closing
print("Connection is closed" if not db.is_connected()
      else "Connection is open")
"""
