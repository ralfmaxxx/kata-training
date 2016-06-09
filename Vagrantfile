Vagrant.configure(2) do |config|
    config.vm.box = "ubuntu/trusty64"

    config.vm.synced_folder "./", "/vagrant"

    config.vm.provider "virtualbox" do |vb|
        vb.memory = "1024"
    end

    config.vm.provision "shell", inline: <<-SHELL
        add-apt-repository -y ppa:ondrej/php
        apt-get update
        apt-get install -y php7.0-dev php7.0-fpm php7.0-xml php7.0-mbstring php7.0-pgsql php7.0-intl php7.0-curl git
        curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
        echo 'cd /vagrant' > /home/vagrant/.bashrc
    SHELL
end
