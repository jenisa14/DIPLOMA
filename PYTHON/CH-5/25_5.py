#10.5_RGBtoColor.py
def convert_to_base10(hex_code):\

 red = int(hex_code[:2], 16)
 green = int(hex_code[2:4], 16)
 blue = int(hex_code[4:], 16)
 return red, green, blue
hex_code = input("Enter a 6-digit RGB color code: ")
red, green, blue = convert_to_base10(hex_code)
print("Red: ", red)
print("Green: ", green)
print("Blue: ", blue)