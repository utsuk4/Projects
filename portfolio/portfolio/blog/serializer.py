from rest_framework import serializers
from .models import Blog

class BlogSerializer(serializers.ModelSerializer):
    class Meta:
        model=Blog
        fields=('id','b_title', 'b_content','b_date')