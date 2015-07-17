sudo yum update -y;
if ! rpm -qa | grep -qw gcc; then
    sudo yum install -y gcc gcc-c++ patch readline readline-devel curl zlib zlib-devel libyaml-devel libffi-devel openssl-devel make bzip2 autoconf automake libtool bison iconv-devel;
fi
if ! rpm -qa | grep -qw ruby; then
    curl -sSL https://rvm.io/mpapis.asc | sudo gpg2 --import -
    curl -L https://get.rvm.io | bash -s stable --ruby;
    source /usr/local/rvm/scripts/rvm;
    rvm install 2.2.1;
    rvm use 2.2.1;
    rvm rubygems latest;
    gem update --system;
    gem install bundler;
    gem install json_pure;
    gem install compass;
    gem install sass;
fi
if ! rpm -qa | grep -qw puppet; then
    sudo rpm --import http://yum.puppetlabs.com/RPM-GPG-KEY-puppetlabs;
    sudo rpm --import /etc/pki/rpm-gpg/RPM-GPG-KEY-CentOS-6
    sudo rpm -ivh http://yum.puppetlabs.com/puppetlabs-release-el-6.noarch.rpm;
    sudo rpm -Uvh http://download.fedoraproject.org/pub/epel/6/i386/epel-release-6-8.noarch.rpm
    sudo yum -y install puppet;
fi
#para evitar el warning de que no existe el archivo
sudo touch /etc/puppet/hiera.yaml;
#istalo los modulos de los que depende mi site.pp
sudo puppet module install jfryman-nginx;
sudo puppet module install thias-php;
sudo puppet module install example42-yum;
sudo puppet module install puppetlabs-mysql;
sudo puppet module install maestrodev-wget;
sudo puppet module install willdurand/nodejs;
