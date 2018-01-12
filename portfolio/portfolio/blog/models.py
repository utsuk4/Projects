# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models

# Create your models here.
class Blog(models.Model):

    b_title = models.CharField(max_length=255)
    b_content=models.TextField()
    b_date=models.DateField()
    # image=models.ImageField(upload_to='images/',blank=True,null=True)


    def __str__(self):
        return self.b_title
