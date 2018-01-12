# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models

# Create your models here.
from django.db import models

# Create your models here.


class PersonalProfile(models.Model):

    name = models.CharField(max_length=255)
    about=models.TextField()
    dob=models.DateField()
    p_address= models.CharField(max_length=100)
    t_address = models.CharField(max_length=100)
    email = models.CharField(max_length=100,null=True)
    mobile = models.CharField(max_length=20,null=True)
    # image=models.ImageField(upload_to='images/',blank=True,null=True)


    def __str__(self):
        return self.name

class Experience(models.Model):
        company = models.CharField(max_length=255)
        about = models.TextField()
        position = models.CharField(max_length=255)
        d_start = models.DateField()
        d_end = models.DateField()

        def __str__(self):
            return self.company

    # class Meta:
    #     ordering=['created_at']


class Education(models.Model):
        institute = models.CharField(max_length=255)
        course = models.CharField(max_length=255)
        d_start = models.DateField()
        d_end = models.DateField()

        def __str__(self):
            return self.institute


class Skill(models.Model):
    skill = models.CharField(max_length=255)

    def __str__(self):
        return self.skill


class Interest(models.Model):
    interest=models.TextField()

    def __str__(self):
        return self.interest

class Project(models.Model):
    project=models.TextField()

    def __str__(self):
        return self.projects