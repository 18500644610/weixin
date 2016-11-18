#!d:/python/python.exe
# encoding:utf-8
# print "Content-type:text/html"
print
import urllib
import urllib2
import re
import MySQLdb
from curd import curd
# url = 'http://localhost/python/day2/news.html'
# user_agent = "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0"
# 	headers = { 'User-Agent' : user_agent}
# request = urllib2.Request(url, headers = headers)
# response = urllib2.urlopen(request)
# content = response.read()
# print content
# navdiv = re.compile('(<div id="channel-all".*?)<div id="body" alog-alias="b">', re.S)
# item = re.search(navdiv,content)
# navCode = item.group(1)
# pattern = re.compile('<a href=("http://.*?/).*?>(.*?)</a>', re.S)
# navval = re.findall(pattern, navCode)
# patternFilter = re.compile('<div.*?</div>')
# str1=''
# val1=''
# for val in navval:
#     s=re.sub(patternFilter, '', val[1])
#     val1=val[0]
#     nurl=val1[1:]
#     str='("'+nurl+'","'+s+'"),'
#     str1+=str
# navstr=str1[:-1]
# # print navstr
# mysql=curd()
# mysql.getrows('insert into navs(url,name) values'+navstr)


url = 'http://yule.baidu.com/'	
user_agent = "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0"
headers = { 'User-Agent' : user_agent}
request = urllib2.Request(url, headers = headers)
response = urllib2.urlopen(request)
content = response.read()
navdiv = re.compile('(<div id="channel-all".*?)<div id="body" alog-alias="b">', re.S)
item = re.search(navdiv,content)
navCode = item.group(1)
pattern = re.compile('<a href=("http://.*?/).*?>(.*?)</a>', re.S)
navval = re.findall(pattern, navCode)
patternFilter = re.compile('<div.*?</div>')


#新闻
# bodyContent = re.compile('(<div id="body".*?)<div id="footerwrapper">', re.S)
# title = re.search(bodyContent,content)
# body = title.group(1)

# pattern3 = re.compile('<a href="(http://.*?)".*?>(.*?)</a>', re.S)
# title = re.findall(pattern3,body)

# img = re.compile('<img.*?>')
# span = re.compile('<span .*?<a href="')
# div =re.compile('<div.*?</div>') 

# # print span
# str1=''
# mysql=curd()
# for item in title:
#     if item[1]!='':
#         url = item[0]
#         title = re.sub(div,'',re.sub(span,'',re.sub(img,'',item[1])))
#         mysql.excute("INSERT INTO news_url(URL,TITLE) VALUES ('" + url + "','" + title + "')")
# con = str1[:-1]
#print con






