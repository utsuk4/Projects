# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('personal_profile', '0004_experience'),
    ]

    operations = [
        migrations.CreateModel(
            name='Education',
            fields=[
                ('id', models.AutoField(verbose_name='ID', serialize=False, auto_created=True, primary_key=True)),
                ('institute', models.CharField(max_length=255)),
                ('course', models.CharField(max_length=255)),
                ('d_start', models.DateField()),
                ('d_end', models.DateField()),
            ],
        ),
    ]
