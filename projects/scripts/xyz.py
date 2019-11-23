import re
money=u"\u20B9"
def Find(string): 
    # findall() has been used  
    # with valid conditions for urls in string 
    url = re.match('http[s]?://(?:[a-zA-Z]|[0-9]|[$-_@.&+] |[!*\(\), ]|(?:%[0-9a-fA-F][0-9a-fA-F]))+', string) 
    return url
product=dict()
f = open("shoes.txt","r")
product['name']=f.readline()
product['desc']=""
i=0
for line in f:
    i=i+1
    # line.rstrip()
    # if(re.search("====",line)):
    #     mycon=mysql.connector.connect(host="localhost",user="root",passwd="Ki008res*",database="MyList")
    #     # cur=mycon.cursor()
        # sql="insert into products(pid,name,description,source,image) values (%s,%s,%s,%s,%s)"
        # val=(str(i),"spark",product['desc'],product['source'],product['image'])
        # try:
        #     cur.execute(sql,val)
        #     mycon.commit()
        # except:
        #     mycon.rollback()
        #     print(error)
    #     product.clear()
    # if(Find(line) and re.search("image",line)):
    #     print(line)
    #     product['image']=line+" "
    # elif(re.match(money,line) and not re.search("\%",line)):
    #     print(line)
    #     product['source']=line+" "
    #     pass
    # elif(re.match(money,line) and re.search("\%",line)):
    #     continue
    # else:
    #     product['desc']=line
    #     print(product['desc'])
print(i)
