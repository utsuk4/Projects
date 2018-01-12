# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='PersonalProfile',
            fields=[
                ('id', models.AutoField(verbose_name='ID', serialize=False, auto_created=True, primary_key=True)),
                ('name', models.CharField(max_length=255)),
                ('about', models.TextField()),
                ('dob', models.DateTimeField(auto_now_add=True)),
                ('p_address', models.CharField(max_length=100)),
                ('t_address', models.CharField(max_length=100)),
            ],
        ),
    ]
