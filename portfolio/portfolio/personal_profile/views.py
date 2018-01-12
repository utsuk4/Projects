# -*- coding: utf-8 -*-

from django.http import HttpResponse
from django.shortcuts import render
from django.template import loader

from .models import PersonalProfile, Experience, Education, Skill, Interest, Project


def index(request):
    template = loader.get_template('personal_profile/personal_profile_view.html')
    p = PersonalProfile.objects.all()
    e= Experience.objects.all()
    edu=Education.objects.all()
    s=Skill.objects.all()
    i=Interest.objects.all()
    context = {'PersonalProfile': p,'Experience':e, 'Education':edu, 'Skill':s, 'Interest':i, 'Project':p}
    return HttpResponse(template.render(context,request))
# Create your views here.


# class ImageView(TemplateView):
#     template_name='personal_profile/personal_profile_view.html'
#     model=Blog
#
#     def get_context_data(self,**kwargs):
#         context=super(BlogDetailView,self).get_context_data(**kwargs)
#         context['blog']=Blog.objects.get(pk=kwargs['pk'])
#         return context