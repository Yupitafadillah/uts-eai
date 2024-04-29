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

# layanan get quantity dari keranjang
# def get_sold_quantity(burger_id):
#     response = requests.get(f'http://localhost:5001/cart/quantity/{burger_id}')
#     return response.jsn()['total_quantity']



if __name__ == "__main__":
    app.run(debug=True, port=5004)
