# -*- coding: utf-8 -*-
from django.contrib import admin
from .models import PersonalProfile, Experience, Education, Skill, Interest, Project


class PersonalProfileAdmin(admin.ModelAdmin):
    list_display = ('name' , 'about' , 't_address','p_address','email','mobile','dob',)

class ExperienceAdmin(admin.ModelAdmin):
    list_display = ('company' , 'about' , 'position','d_start','d_end',)

class EducationAdmin(admin.ModelAdmin):
    list_display = ('institute' , 'course', 'd_start', 'd_end',)

class SkillAdmin(admin.ModelAdmin):
    list_display = ('skill',)

class InterestAdmin(admin.ModelAdmin):
    list_display = ('interest',)

class ProjectAdmin(admin.ModelAdmin):
    list_display = ('project',)

admin.site.register(PersonalProfile, PersonalProfileAdmin)
admin.site.register(Experience, ExperienceAdmin)
admin.site.register(Education, EducationAdmin)
admin.site.register(Skill, SkillAdmin)
admin.site.register(Interest, InterestAdmin)
admin.site.register(Project, ProjectAdmin)

# Register your models here.
