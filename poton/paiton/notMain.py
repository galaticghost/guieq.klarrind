from item import Item

class Phone(Item):
    def __init__(self, name: str, price: float = None, quantity: int = 0,pay_rate: float = 0.8, broken_phones: int = 0):
        super().__init__(
            name,price,quantity,pay_rate
        )
        assert broken_phones >= 0, f"Broken Phones {broken_phones} is not greater than 0"
        self.broken_phones = broken_phones