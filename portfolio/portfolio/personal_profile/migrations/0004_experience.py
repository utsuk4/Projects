# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('personal_profile', '0003_auto_20171215_0308'),
    ]

    operations = [
        migrations.CreateModel(
            name='Experience',
            fields=[
                ('id', models.AutoField(verbose_name='ID', serialize=False, auto_created=True, primary_key=True)),
                ('company', models.CharField(max_length=255)),
                ('about', models.TextField()),
                ('position', models.CharField(max_length=255)),
                ('d_start', models.DateField()),
                ('d_end', models.DateField()),
            ],
        ),
    ]
