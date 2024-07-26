import csv

class Item:
    pay_rate = 0.8
    all = []
    x = 5

    def __init__(self, name: str, price: float = None, quantity: int = 0,pay_rate: float = 0.8):
        assert price >= 0, f"Price {price} is not greater than 0"
        assert quantity >= 0, f"Quantity {quantity} is not greater than 0"
        
        self.name = name
        self.price = price
        self.quantity = quantity
        self.pay_rate = pay_rate

        # Executar
        Item.all.append(self)
    
    def calculate_total_price(self):
        return round(self.price * self.quantity,2)
    
    def apply_discount(self):
        self.price *= self.pay_rate 
    
    def __str__(self):
        return "Xina"

    def __repr__(self):
        return f"Item {self.name}"
    
    @classmethod
    def instancia_via_csv(cls):
        with open ('xina.csv', 'r') as f:
            reader = csv.DictReader(f)
            items = list(reader)
        for item in items:
            Item(
                name=str(item.get('name')),
                price=float(item.get('price')),
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

class Phone(Item):
    def __init__(self, name: str, price: float = None, quantity: int = 0,pay_rate: float = 0.8, broken_phones: int = 0):
        super().__init__(
            name,price,quantity,pay_rate
        )
        assert broken_phones >= 0, f"Broken Phones {broken_phones} is not greater than 0"
        self.broken_phones = broken_phones

phone1 = Phone("Cellphone1",830.43,3,0.8,1)
print(phone1.calculate_total_price())

phone2 = Phone("Cellphone2",950.42,6,0.7,3)
print(phone2.calculate_total_price())
