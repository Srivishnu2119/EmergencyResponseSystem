import mysql.connector


def get_database_connection():
    # Database configuration
    db_config = {
        'host': 'localhost',
        'user': 'root',
        'password': 'Charis@@2023$$',
        'database': 'newcbc',
    }

    # Create and return the database connection
    try:
        connection = mysql.connector.connect(**db_config)
        return connection
    except mysql.connector.Error as err:
        print("Error connecting to the database: {}".format(err))
        return None
