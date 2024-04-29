from flask import Flask, jsonify, render_template
import requests

app = Flask(__name__)

# menu
def get_menus():
    response = requests.get(f'http://localhost:5003/menus')
    return response.json()

@app.route('/menu')
def get_menu():
    menu = get_menus()
    return render_template('index.html', menu=menu)

if __name__ == "__main__":
    app.run(debug=True, port=5004)