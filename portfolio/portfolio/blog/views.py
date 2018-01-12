# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.http import JsonResponse
from rest_framework import generics

from .serializer import BlogSerializer
from .models import Blog
from rest_framework.parsers import JSONParser
from django.shortcuts import render


class BlogListApiView(generics.ListCreateAPIView):
    """List or create Blog."""
    queryset=Blog.objects.all()
    serializer_class=BlogSerializer

def blog_list(request):
    if request.method =='GET':
        blog=Blog.objects.all()
        serializer=BlogSerializer(blog,many=True)
        return JsonResponse(serializer.data,safe=False)

    elif request.method=='POST':
        data=JSONParser().parse(request)
        serializer=BlogSerializer(data=data)
        if serializer.is_valid():
            serializer.save()
            return JsonResponse(serializer.data, status=201)
        return JsonResponse(serializer.errors, status=400)

