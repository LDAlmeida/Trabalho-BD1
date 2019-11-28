from django.urls import path
from educatorr import views
from django.conf.urls import url
from django.conf import settings
from django.conf.urls.static import static

urlpatterns = [
    path('', views.educatorr, name='educatorr'),
] + static(settings.STATIC_URL, document_root = settings.STATIC_ROOT)