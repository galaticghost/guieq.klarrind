import csv

class Item:
    pay_rate = 0.8
    all = []

    def __init__(self, name: str, price: float = None, quantity: int = 0,pay_rate: float = 0.8):
        assert price >= 0, f"Price {price} is not greater than 0"
        assert quantity >= 0, f"Quantity {quantity} is not greater than 0"
        
        self.__name = name
        self.__price = price
        self.quantity = quantity
        self.pay_rate = pay_rate

        # Executar
        Item.all.append(self)
    
    @property
    def name(self):
        return self.__name
    
    @name.setter
    def name(self,name):
        self.__name = name

    @property
    def price(self):
        return self.__price
    
    @price.setter
    def price(self,price):
        self.__price = price

    def calculate_total_price(self):
        return round(self.__price * self.quantity,2)
    
    def apply_discount(self):
        self.__price *= self.pay_rate 

    def apply_increment(self,increment_value):
        self.__price = self.__price + self.__price * increment_value
    
    def __str__(self):
        return "Xina"

    def __repr__(self):
        return f"Item {self.__name}"
    
    @classmethod
    def instancia_via_csv(cls):
        with open ('xina.csv', 'r') as f:
            reader = csv.DictReader(f)
            items = list(reader)
        for item in items:
            Item(
                __name=str(item.get('name')),
                __price=float(item.get('price')),
                quantity=int(item.get('quantity')),
                pay_rate=float(item.get('pay_rate'))
            )

    @staticmethod
    def is_integer(number):
        if isinstance(number, float):
            return number.is_integer()
        elif isinstance(number, int):
            return True
        else:
            return False
