class Node:
    def __init__(self,data):
        self.data = data 
        self.next = None
    
class LinkedList:
    def __init__(self, lst=None):
        self.head = None
        self.tail = None
        if lst:
            temp = lst.head
            while temp:
                new_node = Node(temp.data)
                if not self.head:
                    self.head = new_node
                    self.tail = new_node
                else:
                    pass