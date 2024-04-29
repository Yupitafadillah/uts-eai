from flask import Flask, jsonify

app = Flask(__name__)

menus = [
    {"product_id": 1, "name":"Bacon, Egg & Cheese Biscuit", "price":"3.23", "img":"https://s7d1.scene7.com/is/image/mcdonalds/t-mcdonalds-Bacon-Egg-Cheese-Biscuit-Regular-Size-Biscuit-1:1-4-product-tile-desktop"},
    {"product_id": 2, "name":"Egg McMuffin", "price":"5", "img":"https://s7d1.scene7.com/is/image/mcdonalds/t-mcdonalds-Egg-McMuffin-1:1-4-product-tile-desktop"},
    {"product_id": 3, "name":"Sausage McMuffin", "price":"12", "img": "https://s7d1.scene7.com/is/image/mcdonalds/t-mcdonalds-Sausage-McMuffin:1-4-product-tile-desktop"},
    {"product_id": 4, "name":"Sausage Biscuit", "price":"12", "img": "https://s7d1.scene7.com/is/image/mcdonalds/t-mcdonalds-Sausage-Biscuit-Regular-Size-Biscuit-1:1-4-product-tile-desktop"},
    {"product_id": 5, "name":"Crispy Chicken Sandwich", "price":"8", "img": "https://s7d1.scene7.com/is/image/mcdonalds/t-mcdonalds-crispy-chicken-sandwich:1-4-product-tile-desktop"},
    {"product_id": 6, "name":"Deluxe Crispy Chicken Sandwich", "price":"10", "img": "https://s7d1.scene7.com/is/image/mcdonalds/t-mcdonalds-deluxe-crispy-chicken-sandwich:1-4-product-tile-desktop"}
]

@app.route('/menus')
def get_menus():
    return jsonify(menus)


if __name__ == '__main__':
    app.run(debug=True, port=5003)